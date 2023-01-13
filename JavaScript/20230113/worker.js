self.onmessage = function(event){
  console.log(event.data)
  for(let i = 0; i < 50000; i++){
    for(let j = 0; j < 50000; j++){

    }
  }
  self.postMessage("done")
}