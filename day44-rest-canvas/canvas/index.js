document.addEventListener("DOMContentLoaded", function(event) { 
  let canvas = document.getElementById('canvas');
  let ctx = canvas.getContext('2d');
  ctx.beginPath();
  ctx.moveTo(10, 10);
  ctx.lineTo(100, 100);
  ctx.lineTo(100, 10);
  ctx.closePath();
  
  ctx.lineWidth = 4;
  ctx.strokeStyle = '#0000ff';
  ctx.stroke();

  ctx.fillStyle = '#ff0000';
  ctx.fill();
  ctx.addHitRegion({id: 'triangle'});

  canvas.addEventListener('click', function(event) {
    if (event.region) {
      alert('hit region: ' + event.region);
    }
  });
});