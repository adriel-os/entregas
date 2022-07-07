$(document).ready(a=>{
  var formCadastro =  $('form[name=register]')

    //quando alguma mudança for feita em qqr campo do form de cadastro
    formCadastro.find('input').change(function(){
        if(formCadastro.attr('tosend') != 'true')
        {
          formCadastro.attr('tosend', 'true')
          $('.actionRegister').text('Enviar Cadastro!')
        }
    })

    $('.actionRegister').click(a=>{
        
        if(formCadastro.attr('tosend') == 'true')
          return true;
        
        if(formCadastro.attr('active') == 'false')
        formCadastro.attr('active', 'true').find('.fieldsArea').show(200)
        else
        formCadastro.attr('active', 'false').find('.fieldsArea').hide(200)
    
      })


  


})
