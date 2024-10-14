
const hours = document.querySelector('#hours')
const minutes = document.querySelector('#minutes')
const seconds = document.querySelector('#seconds')
const sections = document.querySelector('#section')
const clock = document.querySelector('#clock')
const bgimg=document.querySelector('#bgimg')


bgimg.style.backgroundImage="url('https://img.freepik.com/free-psd/3d-character-young-woman-business-concept_1150-64156.jpg?t=st=1728741014~exp=1728744614~hmac=784ba5aab924003cdc25db1fbabe29f061f03126633da38cc6e80d089a687c82&w=996')"
bgimg.style.backgroundSize='cover'
let displayTime = () => {
    let hrs = new Date().getHours()
    let mins = new Date().getMinutes()
    let sec = new Date().getSeconds()
   if(hrs>=12){
    sections.innerHTML="PM"
   }else{
    sections.innerHTML="AM"
   }
   if(hrs>=12){
    hrs=hrs-12
   }
   if(sec<10){
    sec="0"+sec
   }
   if(mins<10){
    mins="0"+mins
   }
    hours.innerHTML = hrs
    minutes.innerHTML = mins
    seconds.innerHTML = sec

}

setInterval(displayTime, 10)

