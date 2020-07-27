$(document).ready(function(){
	$('.search-box').on('keyup', function(){
		var searchBox = document.getElementById('search-box').value;
		var resultBox = document.getElementById('result-box');
		var csrf = document.querySelector('[name="_csrfToken"]').value;
		
		var form_data = new FormData();
      	form_data.append('searchText', searchBox);
      	form_data.append('_csrfToken', csrf);
      	if(searchBox != ""){
			resultBox.innerHTML = "";
			$.ajax({
		        //console.log(form_data),
		        url: 'http://localhost/knowledgebase/articles/fullsearch/',
		        method: 'POST',
		        data: form_data,
		        contentType: false,
		        cache: false,
		        processData: false,
		        beforeSend : function(){
		          //setRequestHeader('X-CSRF-Token', csrf);
		        },
		        success : function(data){
		          resultBox.innerHTML = data;
		        }
		    });
		}else{
			resultBox.innerHTML = "";
		}
	});


	    $('#searchText').on('keyup', function(){
        //var searchBox = document.getElementById('searchText').value;
        var searchBox = $.trim( jQuery('#searchText').val() );
        var resultBox = document.getElementById('richList');
        var csrf = document.querySelector('[name="_csrfToken"]').value;
        //console.log(csrf);return;
        var form_data = new FormData();
        form_data.append('searchText', searchBox);
        form_data.append('_csrfToken', csrf);
        if ( searchBox.length > 0 ) {
          $.ajax({
              type: "POST",
              url: "<?=BASE_URL?>articles/results/",
              data: form_data,
              contentType: false,
              cache: false,
              processData: false,
              beforeSend: function () { // Before we send the request, remove the .hidden class from the spinner and default to inline-block.
                  $('#loader').removeClass('hidden')
              },
              success: function (data) {
                  // On Success, build our rich list up and append it to the #richList div.
                  if (data.length > 0) {
                      $('#richList').html(data);
                  }else{
                    let div = "<p class='text-center'>";
                      div += "<span>NO Result</span>";
                    div += "</p>";
                    $('#richList').html(div);
                  }
              },
              complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
                  $('#loader').addClass('hidden')
              },
          });
        }else{
          $('#richList').html("");
        }
  });

});