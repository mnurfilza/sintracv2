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
    startPosition: 2,
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
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}


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