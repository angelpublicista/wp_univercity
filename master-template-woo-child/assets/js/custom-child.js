console.log('El custom js funciona');

jQuery(function ($) {
	$('.button').click(function(e) {
        e.preventDefault();
        $('.button').removeClass('active');
        $itemActive = $(this).attr('data-item');
        $('.item').removeClass('active');
        $($itemActive).addClass('active');
        $(this).addClass('active');
    })
});


// const buttons = document.querySelectorAll('.button');
// const items = document.querySelectorAll('.item');

// for(const button of buttons){
//   button.addEventListener('click', function(e){
//     e.preventDefault();
//     const itemActive = this.dataset.item;
    
//     for(const item of items){
//       item.classList.remove('active');
//     }
    
//     const currentItem = document.querySelector(itemActive)
//     currentItem.classList.add("active");
//     for(const btn of buttons){
//       btn.classList.remove('active')
//     }
//     this.classList.add('active');
    
    
//   })
// }