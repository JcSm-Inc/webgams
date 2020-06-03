import React, { Component } from "react";
import ReactDOM from "react-dom";
import pubsub from "pubsub-js";
class Carrito extends Component {
    constructor(props) {
        super(props);
        this.state = {
            productos: 0
        };
        //this.onClick = this.onClick.bind(this);
    }
    onEventReceived() {
        console.log("se recibio mesaje desde otro componente");
    }
    componentWillMount() {
        this.pubsub_event = pubsub.subscribe(
            "carrito",
            function(topic, item) {
                //al recibir un evento
                const i = this.state.productos + item;
                this.setState({ productos: i });
                console.log(this.state.productos);
            }.bind(this)
        );
    }
    componentWillUnmount() {
        pubsub.unsubscribe(this.pubsub_event);
    }

    render() {
        if (this.state.productos > 0) {
            return (
                <div>
                    <a href="#" className="text-primary">
                        <h4>
                            <i className="fas fa-cart-plus"></i>
                        </h4>
                        <span className="badge badge-danger navbar-badge">
                            {this.state.productos}
                        </span>
                    </a>
                </div>
            );
        } else return <div></div>;
    }
}
export default Carrito;
if (document.getElementById("carrito")) {
    ReactDOM.render(<Carrito />, document.getElementById("carrito"));
}
