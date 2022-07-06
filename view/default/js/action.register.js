$(document).ready(a=>{

    $('.actionRegister').click(a=>{
        let formCadastro =  $('form[name=register]')
        
        if(formCadastro.attr('active') == 'false')
        formCadastro.show(200).attr('active', 'true')
        else
        formCadastro.hide(200).attr('active', 'false')
    
      })


})
