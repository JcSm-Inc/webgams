import React, { Component } from "react";
import ReactDOM from "react-dom";
import pubsub from "pubsub-js";
const url = process.env.MIX_APP_LOCAL_URL;
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
        //const num = 1;
        //pubsub.publish("carrito", num);
        //console.log(num);
    }
    render() {
        return (
            <div
                style={{
                    display: "inline-block",
                    width: "200px",
                    height: "250px"
                }}
            >
                <div className="card  rounded-lg">
                    <img
                        style={{
                            display: "inline-block",
                            width: "200px",
                            height: "100px"
                        }}
                        className="card-img-top rounded-lg"
                        src={url + this.props.imagen}
                        alt="Card image cap"
                    ></img>

                    <div className="card-body text-wrap bg-green-50">
                        <div className="content-center">
                            <button
                                type="button"
                                id={this.props.id}
                                className="flex items-center p-2.5 h-12 w-12 -mt-10 ml-16 bg-green-400 bg-opacity-40 tex-center text-gray-800 rounded-full shadow-xs cursor-pointer hover:bg-green-500 hover:bg-opacity-80 hover:text-gray-100"
                                onClick={e => this.onClick(this.props, e)}
                            >
                                <h6 className="text-center">
                                    <i className="fas fa-cart-plus text-lg "></i>
                                </h6>
                            </button>
                        </div>
                        <h4 className="font-bold text-gray-800 text-center text-base">{this.props.nombre}</h4>
                        <p className="text-xs text-gray-600 italic font-light">{this.props.descripcion}</p>
                        <p className="text-xs text-green-800 font-bold text-right">Disponible: &nbsp;{this.props.cantidad}</p>

                    </div>
                </div>
            </div>
        );
    }
}
export default CardProducto;
