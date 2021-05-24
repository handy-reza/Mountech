$(document).ready(function () {


	$('#list-items').html(localStorage.getItem('listItems'));

    var total  = 0;


	$('.add-items').submit(function(event) 
	{
		event.preventDefault();

		var item = $('#todo-list-item').val();


		if(item) 
		{

			$('#list-items').append("<li><div class='listbox'> <a class='text'> " + item + " </a> " + "</div>" + "<button class='remove'>Remove</button></li>");
			localStorage.setItem('listItems', $('#list-items').html());
			$('#todo-list-item').val("");
            $('.list-count').html(++total);
            $('.add').css('cursor', 'pointer')
            $(".add").css("background-color", "#1784dd");
            alert( item + ' berhasil ditambahkan, total kegiatan : ' + total)

		}else if(item == ""){
            
            $('.add').css('cursor', 'not-allowed')
            $(".add").css("background-color", "#852424");
            alert('Inputan tidak boleh kosong !!');
            
        }
        
	});



	$(document).on('click', '.checkbox', function() 
	{
		if($(this).attr('checked')) 
		{
			$(this).removeAttr('checked');

		} 
		else 
		{
			$(this).attr('checked', 'checked');
            alert( 'Kegiatan telah dilakukan' );
		}

		$(this).parent().toggleClass('completed');
		
		localStorage.setItem('listItems', $('#list-items').html());
	});

	$(document).on('click', '.remove', function() 
	{

		$(this).parent().remove();
        alert('Kegiatan berhasil dihapus, total kegiatan : ' + --total)
		localStorage.setItem('listItems', $('#list-items').html());


        $('.list-count').html(total);
	});

    $(document).on('click', '.clear', function(){
        localStorage.removeItem("listItems");
        $('#list-items').remove();
        
        $('.list-count').html( total - total );

        
    });

});







