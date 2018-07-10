import React from 'react';
import ReactDOM from 'react-dom';
import Clock from './clock/clock.js';
import './style.css';

ReactDOM.render(
  <Clock hours="20" minutes="45"/>,
  document.getElementById('app')
);