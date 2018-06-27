import React from 'react';
import './wall.css';

const quotes = [
  {
    user: "rmaughan0", 
    text: "Be the reason why a friend gets laid today.",
    likes: 10
  },
  {
    user: "fsalvati1",
    text: "The two things you need in order to obtain mainstream recognition is a bomb and solitude.",
    likes: 1
  },
  {
    user: "mburbage2",
    text: "Maybe toxins can turn into money if we learn to thing outside the box?",
    likes: 18
  },
  {
    user: "badenot3",
    text: "Make it so that the truth becomes your cat, and your cat becomes everything.",
    likes: 26
  },
  {
    user: "gvirgoe4",
    text: "With undeserved friendship comes undeserved desease.",
    likes: 4
  }
]

export default class Wall extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      allLikes: this.sum_likes()
    }
  }
  
  new_like() {
    this.setState({
      allLikes: this.state.allLikes + 1
    });
  }

  sum_likes() {
    let result = 0;
    quotes.forEach(post => {result += post.likes});
    return result;
  }

  render() {
    return (
      <div>
        <div className="counter">All the likes: {this.state.allLikes}</div>
        <div>
          { 
            quotes.map(post => {
              return (
                <Quote user={post.user} 
                       text={post.text}
                       likes={post.likes}
                       callback={this.new_like.bind(this)} />
              ) 
            })
          }
        </div>
      </div>
    )
  }
}

class Quote extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      likes: this.props.likes
    }
  }

  like() {
    this.setState({
      likes: this.state.likes + 1
    });

    this.props.callback();
  }

  render() {
    return (
      <div className="quote">
        <div className="heading">
          <span className="user">
            {this.props.user}
          </span>
          <button onClick={this.like.bind(this)}>Like: {this.state.likes}</button>
        </div>
        <div className="text">{this.props.text}</div>
      </div>
    )
  }
} 