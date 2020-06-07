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
            imagen: "",
            cantidad: 0
        };
        this.onClick = this.onClick.bind(this);
    }
    componentDidMount() {
        this.setState({ nombre: this.props.nombre });
        this.setState({ id: this.props.id });
        this.setState({ descripcion: this.props.descripcion });
        this.setState({ imagen: this.props.imagen });
        this.setState({ cantidad: 1 });
    }
    onClick(prop, e) {
        e.preventDefault();
        pubsub.publish("listener", this.state);
        const num = 1;
        pubsub.publish("carrito", num);
        //console.log(num);
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
                        onClick={e => this.onClick(this.props, e)}
                    >
                        <i className="fas fa-cart-plus">Agregar</i>
                    </button>
                </div>
            </div>
        );
    }
}
export default CardProducto;
