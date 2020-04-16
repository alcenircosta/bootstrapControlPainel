
$(function(){
  cliqueMenu();
  scrollItem();
  function cliqueMenu(){
    $('#menu_principal li, .list-group li').click(function(){
      $('#menu_principal li').removeClass('active');
      $('.list-group li').removeClass('cor_padrao');
      $('#menu_principal li[ref_sys='+$(this).attr('ref_sys')+']').addClass('active');
      $('.list-group li[ref_sys='+$(this).attr('ref_sys')+']').addClass('cor_padrao');
      return false;
    });
  }

  function scrollItem(){
    $('#menu_principal li, .list-group li').click(function(){
      var ref = '#'+$(this).attr('ref_sys')+'_section';
      var offset = $(ref).offset().top;
      $('html,body').animate({'scrollTop':offset -70},2000);
      if($(window)[0].innerWidth < 768){
        $('.bi-justify').click();
      }
    });
  }

  $('button.deletar-membro').click(function(){
    var id_membro = $(this).attr('id_membro');
    var el = $(this).parent().parent();
    $.ajax({
      method:'post',
      data:{'id_membro':id_membro},
      url:'deletar.php'
    }).done(function(){
      el.fadeOut(function(){
        el.remove();
      });
    });
  });
});