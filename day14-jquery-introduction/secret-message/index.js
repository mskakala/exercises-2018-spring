let text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam tempora nesciunt molestias dolore facere ipsum, est modi cumque doloremque accusamus ad temporibus quod non delectus, quidem dignissimos officiis sed aliquid quia. Numquam excepturi doloremque suscipit ex maiores, impedit veniam nulla.';

function setup() {
  let padlock = document.getElementById('padlock');

  padlock.addEventListener('mouseenter', function() {
    set_message(text);
  });

  padlock.addEventListener('mouseleave', function() {
    set_message('');   
  });
}

function set_message(msg_text) {
  let message = document.getElementById('message');
  message.innerHTML = msg_text;
}