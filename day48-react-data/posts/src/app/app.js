import React from 'react';
import './app.css';

export default class App extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      allLikes: 0,
      posts: []
    }
  }
  
  componentWillMount() {
    fetch('https://jsonplaceholder.typicode.com/posts')
      .then(response => response.json())
      .then(json => {
        this.setState({
          posts: json
        });
      });
  }

  newLike() {
    this.setState({
      allLikes: this.state.allLikes + 1
    });
  }

  render() {
    return (
      <div className="container">
        <div className="like-counter">All the likes: {this.state.allLikes}</div>
        { 
          this.state.posts.map(post => {
            return (
              <Post title={post.title} 
                    text={post.body}
                    likeCallback={this.newLike.bind(this)} />
            ) 
          })
        }
      </div>
    )
  }
}

class Post extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      likes: 0
    }
  }

  like() {
    this.setState({
      likes: this.state.likes + 1
    });

    this.props.likeCallback();
  }

  render() {
    return (
      <div className="post">
        <div className="heading">
          <button className="like" 
                  onClick={this.like.bind(this)}>
            Like: {this.state.likes}
          </button>
          &nbsp;&nbsp;
          <span className="title">
            {this.props.title}
          </span>
        </div>
        <div className="text">{this.props.text}</div>
      </div>
    )
  }
} 