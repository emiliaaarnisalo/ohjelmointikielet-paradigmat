import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Moi from './Moi';
import Ohje from './Ohje';

class App extends Component {
  render() {
    return (
      <div id="keke">
        <Moi name="Emilia" />
        <Moi name="Aapeli" />
        <Ohje huudahdus="tere" />
      </div>
    );
  }
}

export default App;
