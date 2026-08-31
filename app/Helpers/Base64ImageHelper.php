<?php

namespace App\Helpers;

/**
 * Base64 Image Helper
 * 
 * Helper functions for handling base64 encoded images in CodeIgniter 4
 */
class Base64ImageHelper
{
    /**
     * Save a base64 encoded image to the public folder
     * 
     * @param string $base64Image The base64 encoded image string (can include data:image/* prefix)
     * @param string $outputPath Path relative to public folder where image should be saved
     * @param string $filename Optional filename (without extension). If not provided, a random name will be generated
     * @return array|bool Returns array with path info on success, false on failure
     */
    public static function saveBase64Image(string $base64Image, string $outputPath = 'uploads/images', string $filename = null): array|bool
    {
        // Check if base64 string is not empty
        if (empty($base64Image)) {
            return false;
        }

        // If the base64 string contains the data URI scheme (e.g., data:image/jpeg;base64,), extract the base64 part
        if (preg_match('/^data:image\/(\w+);base64,/', $base64Image, $matches)) {
            // Get the image type (jpeg, png, etc.)
            $imageType = $matches[1];
            
            // Remove the data URI scheme part
            $base64Image = substr($base64Image, strpos($base64Image, ',') + 1);
        } else {
            // Try to determine image type from base64 data
            $decodedData = base64_decode($base64Image);
            $firstBytes = substr($decodedData, 0, 12);
            
            if (strpos($firstBytes, "\xFF\xD8\xFF") === 0) {
                $imageType = 'jpeg';
            } elseif (strpos($firstBytes, "\x89\x50\x4E\x47\x0D\x0A\x1A\x0A") === 0) {
                $imageType = 'png';
            } elseif (strpos($firstBytes, "GIF") === 0) {
                $imageType = 'gif';
            } elseif (strpos($firstBytes, "WEBP") !== false) {
                $imageType = 'webp';
            } else {
                $imageType = 'png'; // Default to png if can't determine type
            }
        }

        // Decode base64 data
        $imageData = base64_decode($base64Image);
        
        // Check if image data is valid
        if ($imageData === false) {
            return false;
        }
        
        // Create output directory if it doesn't exist
        $fullOutputPath = FCPATH . $outputPath;
        if (!is_dir($fullOutputPath)) {
            mkdir($fullOutputPath, 0755, true);
        }
        
        // Generate filename if not provided
        if ($filename === null) {
            $filename = md5(uniqid(mt_rand(), true)) . '_' . time();
        }
        
        // Full path with filename and extension
        $fullFilePath = $fullOutputPath . '/' . $filename . '.' . $imageType;
        $relativePath = $outputPath . '/' . $filename . '.' . $imageType;
        
        // Save image file
        if (file_put_contents($fullFilePath, $imageData)) {
            return [
                'success'      => true,
                'filename'     => $filename . '.' . $imageType,
                'file_path'    => $fullFilePath,
                'relative_path'=> $relativePath,
                'url'          => base_url($relativePath),
                'image_type'   => $imageType
            ];
        }
        
        return false;
    }

    /**
     * Validate if a string is a valid base64 encoded image
     * 
     * @param string $base64String The base64 string to validate
     * @return bool True if valid, false otherwise
     */
    public static function isValidBase64Image(string $base64String): bool
    {
        // Check if empty
        if (empty($base64String)) {
            return false;
        }
        
        // Remove data URI scheme if present
        if (preg_match('/^data:image\/(\w+);base64,/', $base64String)) {
            $base64String = substr($base64String, strpos($base64String, ',') + 1);
        }
        
        // Check if string is valid base64
        if (!base64_decode($base64String, true)) {
            return false;
        }
        
        // Decode and check if it's a valid image
        $imageData = base64_decode($base64String);
        $f = finfo_open();
        $mimeType = finfo_buffer($f, $imageData, FILEINFO_MIME_TYPE);
        finfo_close($f);
        
        return strpos($mimeType, 'image/') === 0;
    }

    /**
     * Get image dimensions from base64 encoded image
     * 
     * @param string $base64Image The base64 encoded image
     * @return array|false Array with width and height or false on failure
     */
    public static function getBase64ImageDimensions(string $base64Image): array|false
    {
        // Remove data URI scheme if present
        if (preg_match('/^data:image\/(\w+);base64,/', $base64Image)) {
            $base64Image = substr($base64Image, strpos($base64Image, ',') + 1);
        }
        
        $imageData = base64_decode($base64Image);
        if (!$imageData) {
            return false;
        }
        
        // Create temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'img');
        file_put_contents($tempFile, $imageData);
        
        // Get image dimensions
        if (($imageSize = getimagesize($tempFile)) !== false) {
            unlink($tempFile);  // Delete temp file
            return [
                'width' => $imageSize[0],
                'height' => $imageSize[1],
                'mime' => $imageSize['mime']
            ];
        }
        
        unlink($tempFile);  // Delete temp file
        return false;
    }
}