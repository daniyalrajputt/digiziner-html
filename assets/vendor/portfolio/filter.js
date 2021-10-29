

  

  
  $(document).ready(function () {
      const activeList = $('.list.active').attr('data-filter')
      if(activeList==='websites'){
          $('.itemBox1').show('1000');
          $('.itemBox').hide('1000');
      }
      // $('.itemBox1').hide('1000');
      $('.list').click(function () {
          const value = $(this).attr('data-filter');
          if (value == 'websites') {
              $('.itemBox1').show('1000');
              $('.itemBox').hide('1000');
  
          }
          else {
              $('.itemBox').not('.' + value).hide('1000');
              $('.itemBox').filter('.' + value).show('1000');
              $('.itemBox1').hide('1000');
  
          }
      })
      $('.list').click(function () {
          $(this).addClass('active').siblings().removeClass('active');
      })
  })
  