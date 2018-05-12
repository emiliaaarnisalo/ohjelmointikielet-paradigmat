import React, { Component } from 'react';

class Moi extends React.Component {
    render() {
        return <h1>Moi ja tervetuloa {this.props.name}</h1>;
    }
}

export default Moi;