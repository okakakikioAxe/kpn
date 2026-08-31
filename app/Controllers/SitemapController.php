<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product;

class SitemapController extends Controller
{
    private string $domain = 'https://www.karyapilarnusantara.com';

    /* =========================
     * SITEMAP INDEX
     * ========================= */
    public function index()
    {
        $xml  = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        $xml .= $this->sitemapItem('/sitemap-static.xml');
        $xml .= $this->sitemapItem('/sitemap-products.xml');

        $xml .= '</sitemapindex>';

        return response()
            ->setHeader('Content-Type', 'application/xml')
            ->setBody($xml);
    }

    private function sitemapItem(string $path): string
    {
        return
            '<sitemap>' .
                '<loc>' . $this->domain . $path . '</loc>' .
                '<lastmod>' . date('Y-m-d') . '</lastmod>' .
            '</sitemap>';
    }

    /* =========================
     * STATIC SITEMAP
     * ========================= */
    public function static()
    {
        $urls = [
            ['/', 'daily', '1.0'],
            ['/product', 'weekly', '0.3'],
            ['/contact-us', 'weekly', '0.3'],
            ['/about-us', 'weekly', '0.3'],
            ['/galeri', 'weekly', '0.3'],
            ['/favicon-kpn.ico', null, '0.1'],
            ['/kpn-logo.png', null, '0.1'],
        ];

        $xml = $this->openUrlSet();

        foreach ($urls as [$path, $freq, $priority]) {
            $xml .= '<url>';
            $xml .= '<loc>' . esc($this->domain . $path) . '</loc>';

            if ($freq) {
                $xml .= '<changefreq>' . $freq . '</changefreq>';
            }

            $xml .= '<priority>' . $priority . '</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response()
            ->setHeader('Content-Type', 'application/xml')
            ->setBody($xml);
    }

    /* =========================
     * PRODUCTS SITEMAP
     * ========================= */
    public function products()
    {
        $productModel = new Product();

        $products = $productModel
            ->select('slug, updated_at')
            ->where('status', 1)
            ->findAll();

        $xml = $this->openUrlSet();

        foreach ($products as $product) {
            $xml .= '<url>';
            $xml .= '<loc>' . esc($this->domain . '/product/' . $product['slug']) . '</loc>';

            if (!empty($product['updated_at'])) {
                $xml .= '<lastmod>' . date('Y-m-d', strtotime($product['updated_at'])) . '</lastmod>';
            }

            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.8</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response()
            ->setHeader('Content-Type', 'application/xml')
            ->setBody($xml);
    }

    private function openUrlSet(): string
    {
        return '<?xml version="1.0" encoding="UTF-8"?>' .
               '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    }
}
