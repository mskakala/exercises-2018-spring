$(document).ready(() => {
  $('#btn').click(() => {
    fetch('https://jsonplaceholder.typicode.com/posts')
      .then(response => response.json())
      .then(json => {
        json.forEach(post => {
          let $post = $('<div>').addClass('post');
          $post.append($('<h4>').text(post.title));
          $post.append($('<p>').text(post.body));
          $('#posts').append($post);
        });
      });
  });
});
