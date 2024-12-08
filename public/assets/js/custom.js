// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();



// owl carousel slider js
var owl = $('.project_carousel').owlCarousel({
    loop: false,
    margin: 15,
    center: true,
    startPosition: 1,
    autoplay: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    autoplayHoverPause: true,
    responsive: {
        0: {
            center: false,
            items: 1,
            margin: 0
        },
        769: {
            items: 2,
        },
        992: {
            center: true,
            items: 3
        }
    }
})


// owl.owlcarousel2_filter

$('.owl-filter-bar').on('click', '.item', function (e) {
    var $items = $('.owl-filter-bar a')
    var $item = $(this);
    var filter = $item.data('owl-filter')
    $items.removeClass("active");
    $item.addClass("active");
    owl.owlcarousel2_filter(filter);

    e.preventDefault();
})
/** google_map js **/



document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementsByClassName("navbar-nav");
    let scrollPosition = 0;
  
    function scrollMenu() {
        console.log(menu)
      const menuItemHeight = menu.querySelector("li").offsetHeight;
  
      // Geser menu secara otomatis
      scrollPosition -= 1; // Sesuaikan kecepatan dengan mengubah angka ini
      menu.style.transform = `translateY(${scrollPosition}px)`;
  
      // Jika item sudah keluar dari tampilan, pindahkan ke bawah
      if (Math.abs(scrollPosition) >= menuItemHeight) {
        scrollPosition = 0;
        const firstItem = menu.children[0];
        menu.appendChild(firstItem); // Pindahkan item pertama ke bawah
        menu.style.transform = `translateY(${scrollPosition}px)`;
      }
  
      requestAnimationFrame(scrollMenu);
    }
  
    // Mulai animasi
    scrollMenu();
  });

//   function initMap() {
//     // Koordinat lokasi
//     const location = { lat: -6.2933889, lng: 107.0560278 };

//     // Buat peta
//     const map = new google.maps.Map(document.getElementById("map"), {
//         zoom: 17, // Tingkat zoom
//         center: location, // Titik tengah peta
//     });

//     // Tambahkan marker di lokasi tersebut
//     const marker = new google.maps.Marker({
//         position: location,
//         map: map,
//         title: "Lokasi Anda",
//     });
// }

// // Panggil fungsi initMap setelah peta dimuat
// window.onload = initMap;