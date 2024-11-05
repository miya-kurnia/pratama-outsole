// // Mengambil semua data
// $.getJSON('data/menu.json', function (data) {
//     console.log(data);
//     const menu = data.menu;
//     $.each(menu, function(i, data) {
//         $('#list-menu').append('<div data-aos="fade-up" data-aos-duration="1000" class="space-y-2"><img src='+ data.image +' alt="" class="bg-center w-full "><div class="flex items-center pt-2"><h4 class="text-[1.2rem] font-semibold">'+ data.title +'</h4><div class="flex items-center space-x-1 ml-auto"><img src="../assets/Star.svg" alt=""><p>'+ data.rating +'</p></div></div><div class="space-y-5"><p class="text-[.9rem] text-content">'+ data.desc +'</p><div class="flex items-center"><button class="flex items-center space-x-2 bg-[#F5FCE8] rounded-sm px-2 py-2 text-second"><ion-icon name="add-outline" class="font-semibold"></ion-icon><p>Add</p></button><p class="ml-auto font-semibold">$'+ data.price +'</p></div></div></div>')
//     })
// })