import React, { Component } from "react";
import ReactDOM from "react-dom";
import pubsub from "pubsub-js";
class CardProducto extends Component {
    constructor(props) {
        super(props);
        this.state = {
            id: "",
            nombre: "",
            descripcion: "",
            cantidad: "",
            imagen: ""
        };
        this.onClick = this.onClick.bind(this);
    }

    onClick(event) {
        console.log(event.target.type);
        console.log(this.props);
        pubsub.publish("listener", this.props);
    }
    render() {
        return (
            <div className="card mb-4">
                <img
                    className="card-img-top"
                    src={this.props.imagen}
                    alt="Card image cap"
                ></img>

                <div className="card-body text-wrap">
                    <h4>{this.props.nombre}</h4>
                    <p>{this.props.descripcion}</p>
                    <p>Disponible: &nbsp;{this.props.cantidad}</p>
                    <button
                        type="button"
                        id={this.props.id}
                        className="btn btn-blue btn-sm"
                        onClick={this.onClick}
                    >
                        <i className="fas fa-cart-plus">Agregar</i>
                    </button>
                </div>
            </div>
        );
    }
}
export default CardProducto;
