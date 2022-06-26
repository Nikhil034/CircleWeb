 "use strict";






//Validation of register page
const Validation=function()
   {
    
    let Validate_user=document.getElementById('User_name').value;
    let Validate_pass=document.getElementById('User_pass').value;
    let Validate_confirm=document.getElementById('User_conf').value;
    let Validate_number=document.getElementById('User_number').value;
    let Validate_position=document.getElementById('User_position').value;
    let Validate_skills=document.getElementById('User_skills').value;
    let Validate_whatsapp=document.getElementById('User_whatsapp').value;

    if(!isNaN(Validate_user))
    {
      document.getElementById('msgNm').innerHTML="invalid format of the field!";
      return false;
    }
    if(Validate_pass.length<5 && Validate_confirm.length<5 )
    {
      document.getElementById('msgPass').innerHTML="Password is too short!";
      return false;
    }
    if(Validate_pass!=Validate_confirm)
    {
      document.getElementById('msgPass').innerHTML="*Password are not match!";
      return false;
    }
    if(Validate_number.length<10 || Validate_number.length>10)
    {
      document.getElementById('msgPhone').innerHTML="Require 10 digits!";
      return false;
    }
    if(!isNaN(Validate_position))
    {
       document.getElementById('msgPos').innerHTML="invalid format of the field!";
       return false;
    }
    if(!isNaN(Validate_skills))
    {
       document.getElementById('msgSkill').innerHTML="invalid format of the field!";
       return false;
    }
    if(Validate_whatsapp.length<9 || Validate_whatsapp.length<10)
    {
       document.getElementById('msgWht').innerHTML="Require 10 digits!";
       return false;
    }

  }


//Back to previous back
  const Exit=function()
  {
    
    window.history.back()
  }

  const ShowPassword=function()
  {
    const get=document.querySelector('#User_pass');
    get.setAttribute('type','text');
   
  }
  const HidePassword=function()
  {
    const get=document.querySelector('#User_pass');
    get.setAttribute('type','Password');
   
  }

//   const divcatch=document.querySelectorAll("#container");
//   const cls=document.querySelector('#close');
//   const init=function(){
    
//     for (let i = 0; i < divcatch.length; i++) {
//       divcatch[i].classList.toggle('modal');
//       console.log(i);
// }
    
//   }
//   init();

// const btnRoll=document.querySelectorAll('#mybtn');
// for(let j=0;j<btnRoll.length;j++)
// {
//   console.log(j);

// }
