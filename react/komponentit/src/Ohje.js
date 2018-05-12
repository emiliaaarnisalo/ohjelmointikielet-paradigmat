import React, { Component } from 'react';

class Ohje extends React.Component {
    render() {
        return <h2>Tässä on ensimmäinen React - komponentti, {this.props.huudahdus}</h2>;
    }
}

export default Ohje;