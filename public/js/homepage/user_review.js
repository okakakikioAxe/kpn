// ================= Animation =================
function createElement() {
  for (let i = 0; i < userReviewData.length; i++) {
    const card = document.createElement("div");
    card.className = "w-full relative px-[15px]";
    card.textContent = i;
    let elementString =
      `
            
                <div class="h-full  px-[35px] py-[35px] rounded-[40px] overflow-hidden bg-white shadow-[1px_3px_5px_3px_rgba(149,143,143,0.15)]">
                <div class="flex justify-center w-full">
                    <div class="w-[104px] h-[104px] rounded-full bg-gray-400 absolute top-0 translate-x-0 -translate-y-1/2">
                    <img class=" w-full h-full object-cover rounded-full" src="worker working in work.jpg" alt="contoh gambar">
                    </div>
                </div>
                <div class="h-full flex flex-col">
                    <div class="size-auto w-full flex-none ">
                    <div class="mt-[25px]">
                        <h3 class="text-center text-black text-[16px] font-(family-name:Trebuchet) font-[500]">` +
      userReviewData[i]["name"] +
      `</h3>
                        <h4 class="text-center text-black text-[14px] font-(family-name:HusmanistNormal) font-[400]">` +
      userReviewData[i]["role"] +
      `</h4>
                    </div>
                    </div>
                    <div class="size-auto h-full grow mt-[23px] flex items-center justify-center">
                    <div class="">
                        <div class="w-full  fill-[#5E5E5E]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] rotate-180 fill-[#5E5E5E]" viewBox="0 0 24 24" width="512" height="512">
                            <path d="M8,4H4A4,4,0,0,0,0,8v4a2,2,0,0,0,2,2H7.91A6.006,6.006,0,0,1,2,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,8,4Z" />
                            <path d="M22,4H18a4,4,0,0,0-4,4v4a2,2,0,0,0,2,2h5.91A6.006,6.006,0,0,1,16,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,22,4Z" />
                        </svg>
                        </div>
                        <p class="block mt-[11px] text-start text-[#5E5E5E] text-[14px] font-(family-name:HumanistNormal) italic font-[400]">` +
      userReviewData[i]["message"] +
      `</p>
                    </div>
                    </div>
                    <div class="size-auto flex-none mt-[30px]">
                    <div class="grid grid-cols-2 gap-[20px]">
                        <img class=" w-full h-full rounded-[10px]" src="` +
      userReviewData[i]["images"][0] +
      `" alt="` +
      userReviewData[i]["images_alt"][0] +
      `">
                        <img class=" w-full h-full rounded-[10px]" src="` +
      userReviewData[i]["images"][1] +
      `" alt="` +
      userReviewData[i]["images_alt"][1] +
      `">
                    </div>
                    </div>
                </div>
                </div>
            `;
    card.innerHTML = elementString;
    container.appendChild(card);
  }
}

let userReviewData = [
  {
    name: "Abdul Aziz",
    role: "User Role",
    message: "Kami menyediakan produk unggulan dan pengiriman tepat waktu Kami",
    images: ["worker working in work.jpg", "worker working in work.jpg"],
    images_alt: ["gambar 1", "gambar 2"],
  },
  {
    name: "Abdul",
    role: "User Role",
    message: "Kami menyediakan produk unggulan dan pengiriman tepat waktu Kami",
    images: ["worker working in work.jpg", "worker working in work.jpg"],
    images_alt: ["gambar 1", "gambar 2"],
  },
  {
    name: "Aziz",
    role: "User Role",
    message: "Kami menyediakan produk unggulan dan pengiriman tepat waktu Kami",
    images: ["worker working in work.jpg", "worker working in work.jpg"],
    images_alt: ["gambar 1", "gambar 2"],
  },
  {
    name: "Joko",
    role: "User Role",
    message: "Kami menyediakan produk unggulan dan pengiriman tepat waktu Kami",
    images: ["worker working in work.jpg", "worker working in work.jpg"],
    images_alt: ["gambar 1", "gambar 2"],
  },
  {
    name: "Pak Dul",
    role: "User Role",
    message:
      "I've adjusted the animation to loop seamlessly by modifying the translation distance and ensuring the duplicated cards align correctly.",
    images: ["worker working in work.jpg", "worker working in work.jpg"],
    images_alt: ["gambar 1", "gambar 2"],
  },
];
const container = document.getElementById("cardContainer");

createElement();
createElement();

container.style.width = "5000px"; // 20 cards * 200px each
container.style.animation = "user-review-slide 30s linear infinite";
// ================= End of Animation =================
