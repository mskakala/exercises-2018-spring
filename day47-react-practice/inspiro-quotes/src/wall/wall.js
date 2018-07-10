import React from 'react';
import './wall.css';

export default class Wall extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      allLikes: 0
    }
  }
  
  new_like() {
    this.setState({
      allLikes: this.state.allLikes + 1
    });
  }

  render() {
    return (
      <div>
        <div className="counter">All the likes: {this.state.allLikes}</div>
        <Quote user="John Doe" 
               text="Inside every breath of fresh air there is a rhythm."
               callback={this.new_like.bind(this)} />
        <Quote user="Jane Doe" 
               text="Consciousness the price to pay for being victims?"
               callback={this.new_like.bind(this)} />
      </div>
    )
  }
}

class Quote extends React.Component {
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