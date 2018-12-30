document.querySelector('#login').addEventListener('submit',function(e){
    document.querySelector('#login').classList.add("hello")
    e.preventDefault()
    console.log('hello')
})