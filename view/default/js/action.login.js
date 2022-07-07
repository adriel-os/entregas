$(document).ready(a=>{
    const formLogin =  $('form[name=auth]')
    //quando alguma mudança for feita em qqr campo do form de cadastro
    formLogin.find('input').change(function(){
            if(formLogin.attr('tosend') != 'true')
            {
                formLogin.attr('tosend', 'true')
              $('.actionEntrar').text('Fazer login!')
            }
        })

    $('.actionEntrar').click(a=>{
        
        if(formLogin.attr('tosend') == 'true')
          return true;
        
        if(formLogin.attr('active') == 'false')
        formLogin.attr('active', 'true').find('.fieldsArea').show(200)
        else
        formLogin.attr('active', 'false').find('.fieldsArea').hide(200)
      })


})
