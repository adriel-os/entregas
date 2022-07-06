$(document).ready(a=>{

    $('.actionEntrar').click(a=>{
        let formLogin =  $('form[name=auth]')
        
        if(formLogin.attr('active') == 'false')
        formLogin.show(200).attr('active', 'true')
        else
        formLogin.hide(200).attr('active', 'false')
    
      })


})
