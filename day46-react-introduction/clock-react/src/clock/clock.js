import React from 'react';
import './clock.css';

class DayPeriod extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      period: props.period
    };
  }

  flip() {
    let period = 'am';
    if(this.state.period == 'am') {
      period = 'pm';
    }
    
    this.setState({
      period: period
    });
  }

  render() {
    return (
      <span className={this.state.period}
            onClick={this.flip.bind(this)}>
        {this.state.period}
      </span> 
    );
  }
}

export default class Clock extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      hours: Number(props.hours),
      minutes: Number(props.minutes)
    };
  }
  
  increment_hours() {
    this.setState({
      hours: (this.state.hours + 1) % 12,
      minutes: this.state.minutes
    });
  }

  increment_minutes() {
    this.setState({
      hours: this.state.hours,
      minutes: (this.state.minutes + 1) % 60
    });
  }

  render() {
    return (
      <div>
        <span className="hours" 
              onClick={this.increment_hours.bind(this)}>{this.state.hours}</span>:
        <span className="minutes"
              onClick={this.increment_minutes.bind(this)}>{this.state.minutes}</span>
        &nbsp;
        <DayPeriod period="am" />
      </div>
    );
  }
}