$(document).ready(function(){
        $('#form_editor').hide();
        $('#form_editor_resume').hide();
        $('#DivFormAddPj').hide();
        $('#importImg').hide();
        $('#importPlaqt').hide();
        $('#importVideo').hide();

        $('.editor').click(function(){
            $('#form_editor').show();
            $('.editor').hide();
        
        });

        $('.editor_resume').click(function(){
            $('.editor_resume').hide();
            $('#form_editor_resume').show();
        });


         $('.close_editor').click(function(){
            $('#form_editor').hide();
            $('.editor').show();
            $('.editor_resume').show();
            $('#form_editor_resume').hide();
        });

        $('#addImg').click(function(){
           $('#DivFormAddPj').show();
           $('#AddPj').hide();
           $('#importImg').show();
    
        });

        $('#addPlaquette').click(function(){
           $('#DivFormAddPj').show();
           $('#AddPj').hide();
           $('#importPlaqt').show();
        
        });


        $('#addVideo').click(function(){
           $('#DivFormAddPj').show();
           $('#AddPj').hide();
           $('#importVideo').show();
          
        });

        $('.close_DivFormAddPj').click(function(){
           $('#DivFormAddPj').hide();
           $('#AddPj').show();
            $('#importImg').hide();
            $('#importPlaqt').hide();
            $('#importVideo').hide();
          
        });



        
         
         
});