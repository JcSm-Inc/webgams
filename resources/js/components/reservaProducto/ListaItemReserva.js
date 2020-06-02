import React, { Component } from "react";
import ReactDOM from "react-dom";
import pubsub from "pubsub-js";
import ItemReserva from "./ItemReserva";

class ListaItemReserva extends Component {
    constructor(props) {
        super(props);
        this.state = {
            productos: []
        };
        this.borrarItem = this.borrarItem.bind(this);
    }
    onEventReceived() {
        console.log("se recibio mesaje desde otro componente");
    }
    componentWillMount() {
        this.pubsub_event = pubsub.subscribe(
            "listener",
            function(topic, item) {
                //al recibir un evento
                console.log(topic, item);
                const items = [...this.state.productos, item];
                this.setState({ productos: items });
                console.log(this.state.productos);
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
        this.setState({
            productos: filtradoItems
        });
    }
    render() {
        return (
            <div className="card">
                <ul className="list-group list-group-flush">
                    <li className="list-group-item">
                        <h4>Pedido de producto</h4>
                    </li>
                    <li className="list-group-item">
                        {this.state.productos.map((producto, i) => {
                            return (
                                <div key={producto.id}>
                                    <div className="col mb-4">
                                        <ItemReserva
                                            id={producto.id}
                                            imagen={producto.imagen}
                                            nombre={producto.nombre}
                                            descripcion={producto.descripcion}
                                            cantidad={producto.cantidad}
                                            borrarItem={this.borrarItem}
                                        />
                                    </div>
                                </div>
                            );
                        })}
                    </li>
                    <form action="">
                        <button className="btn btn-outline-blue">
                            Realizar Pedido
                        </button>
                    </form>
                </ul>
            </div>
        );
    }
}
export default ListaItemReserva;
