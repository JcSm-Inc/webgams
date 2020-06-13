import React, { Component } from "react";
import ReactDOM from "react-dom";
import pubsub from "pubsub-js";
import ItemReserva from "./ItemReserva";
import "./scrollbar.css";
import axios from "axios";
const url = process.env.MIX_APP_LOCAL_URL;

class ListaItemReserva extends Component {
    constructor(props) {
        super(props);
        this.state = {
            productos: []
        };
        this.borrarItem = this.borrarItem.bind(this);
        this.onChange = this.onChange.bind(this);
        this.submitHandler = this.submitHandler.bind(this);
    }
    onEventReceived() {
        console.log("se recibio mesaje desde otro componente");
    }
    componentWillMount() {
        this.pubsub_event = pubsub.subscribe(
            "listener",
            function(topic, item) {
                //al recibir un evento
                let sw = this.state.productos.findIndex(
                    producto => producto.id === item.id
                );
                console.log(sw);
                if (sw < 0) {
                    const num = 1;
                    pubsub.publish("carrito", num);
                    const items = [...this.state.productos, item];
                    this.setState({ productos: items });
                }
            }.bind(this)
        );
    }
    componentWillUnmount() {
        pubsub.unsubscribe(this.pubsub_event);
    }
    borrarItem(key) {
        const filtradoItems = this.state.productos.filter(
            item => item.id !== key
        );
        const num = -1;
        pubsub.publish("carrito", num);
        this.setState({
            productos: filtradoItems
        });
    }
    onChange(id, valor) {
        const items = this.state.productos;
        items.find(item => item.id === id).cantidad = valor;
        this.setState({ productos: items });
        //console.log(this.state.productos);
    }
    submitHandler(e) {
        e.preventDefault();
        console.log(this.state);
        axios
            .post(url + "reserva/store", this.state)
            .then(response => {
                const h = response.data.reserva.id;
                window.location = url + "reserva/" + h + "/edit";
                console.log(h);
            })
            .catch(error => {
                console.log(error);
            });
    }
    render() {
        return (
            <div>
                <div className="card">
                    <ul className="list-group list-group-flush">
                        <li className="list-group-item">
                            <h6 className="text-center">Pedido de producto</h6>
                        </li>
                        <li className="list-group-item scrollbar scrollbar-primary">
                            {this.state.productos.map((producto, i) => {
                                return (
                                    <div key={producto.id}>
                                        <div className="col mb-4">
                                            <ItemReserva
                                                id={producto.id}
                                                imagen={url + producto.imagen}
                                                nombre={producto.nombre}
                                                descripcion={
                                                    producto.descripcion
                                                }
                                                cantidad={producto.cantidad}
                                                borrarItem={this.borrarItem}
                                                onChange={this.onChange}
                                            />
                                        </div>
                                    </div>
                                );
                            })}
                        </li>
                        <form onSubmit={this.submitHandler}>
                            <button
                                type="submit"
                                className="btn btn-outline-blue"
                            >
                                Realizar Pedido
                            </button>
                        </form>
                    </ul>
                </div>
            </div>
        );
    }
}
export default ListaItemReserva;
if (document.getElementById("listaitemreserva")) {
    ReactDOM.render(
        <ListaItemReserva />,
        document.getElementById("listaitemreserva")
    );
}
