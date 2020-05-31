import React, { Component } from "react";
import ReactDOM from "react-dom";

class CardProducto extends Component {
    render() {
        return (
            <div class="card">
                <img
                    class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
                    alt="Card image cap"
                ></img>
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content
                    </p>
                </div>
            </div>
        );
    }
}

export default CardProducto;
