<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('.opt_by').click(function(){
            $('.opt_by').removeClass('selected');
            $(this).addClass('selected');
            if($('.mtly').hasClass('selected')){
                $('#monthly').removeClass('hidden');
            } else{
                $('#monthly').addClass('hidden');
            }
            if($('.bypro').hasClass('selected')){
                $('#by_prod').removeClass('hidden');
            } else{
                $('#by_prod').addClass('hidden');
            }
        });
    });
</script>
<script>
    $(document).ready(function(){   
        $('.btn-increase').click(function(){
            var t = Number($('.quantity_value').text());
            console.log(t);
            t = t+1;
            $('.quantity_value').text(t);
        });
        $('.btn-reduction').click(function(){
            var t = Number($('.quantity_value').text());
            console.log(t);
            t = t-1;
            $('.quantity_value').text(t);
        });
    })
</script>
<script>
    $(document).ready(function(){
        $('.nav-cart').click(function(){
            $('.nav-cart').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.switch_content').click(function(){
            if ($('#ml').hasClass('not_chose_this')){
                $('.switch_content').removeClass('not_chose_this');
                $('.switch_content').removeClass('chose_this');
                $('#kd').addClass('not_chose_this');
                $('#ml').addClass('chose_this');
            } else if ($('#kd').hasClass('not_chose_this')){    
                $('.switch_content').removeClass('not_chose_this');
                $('.switch_content').removeClass('chose_this');
                $('#ml').addClass('not_chose_this');
                $('#kd').addClass('chose_this');
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.cat').click(function(){
            $('.cat').removeClass('pink');
            $(this).addClass('pink');
        });
    });
</script>

{{-- Get HTML gio hang le --}}
<script>
    $(document).ready(function(){
        $('.nav-cart').click(function(){
          let url = $(this).attr('data-url');
          $.ajax({
              url: url,
              type: 'GET',
              dataType:'html',
              success: function(data){
                  $('#container-cart').html(data);
              }
          })
        });
    })
</script>