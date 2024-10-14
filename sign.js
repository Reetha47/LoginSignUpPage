
const btn = document.getElementById('btn')
const conatiner = document.getElementById('container')
const log=document.getElementById('log')
const login=document.getElementById('login')
const heading=document.getElementById('heading')

document.body.style.backgroundImage = "url('https://img.freepik.com/free-photo/business-people-casual-meeting_53876-101882.jpg?uid=R164351598&ga=GA1.1.1386573007.1725017270&semt=ais_hybrid')"
document.body.style.backgroundSize = 'cover'
heading.style.color='white'
fields.style.color = 'blue'
btn.style.color = 'black'
btn.style.font = 'bold'
log.style.color='white'
login.style.color='blue'
document.addEventListener("DOMContentLoaded", () => {
    const fields = document.getElementById('fields')
    const email=document.getElementById('email')
    const password = document.getElementById('password')
    const re_password = document.getElementById('re_password')

    fields.addEventListener('Submit', () => {
        const email=new Email().getElementById('email');
        if(email===email){
            alert('Email taken')
        }
        if (password !== re_password) {
            alert('Password Mis-matched')
        }
        alert('Login Successfully')
    })
})
