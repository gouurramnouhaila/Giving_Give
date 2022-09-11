import React from "react";

export default class Test extends React.Component {
    render() {
        return (
            <div className="container-xl">
                <div className="row">
                    <div className="col-md-12">
                        <h2>Featured <b>Products</b></h2>
                        <div id="myCarousel" className="carousel slide" data-ride="carousel" data-interval="0">
                            <ol className="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" className="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div className="carousel-inner">
                                <div className="item carousel-item active">
                                    <div className="row">
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300" className="img-fluid"
                                                         alt="" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Apple iPad</h4>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p className="item-price"><strike>$400.00</strike> <b>$369.00</b>
                                                    </p>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300"
                                                         className="img-fluid" alt="Headphone" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Sony Headphone</h4>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p className="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300"
                                                         className="img-fluid" alt="Macbook" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Macbook Air</h4>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p className="item-price"><strike>$899.00</strike> <b>$649.00</b>
                                                    </p>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300" className="img-fluid"
                                                         alt="Nikon" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Nikon DSLR</h4>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-o"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p className="item-price"><strike>$315.00</strike> <b>$250.00</b>
                                                    </p>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="item carousel-item">
                                    <div className="row">
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300"
                                                         className="img-fluid" alt="Play Station" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Sony Play Station</h4>
                                                    <p className="item-price"><strike>$289.00</strike>
                                                        <span>$269.00</span></p>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300"
                                                         className="img-fluid" alt="Macbook" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Macbook Pro</h4>
                                                    <p className="item-price"><strike>$1099.00</strike>
                                                        <span>$869.00</span></p>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300"
                                                         className="img-fluid" alt="Speaker" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Bose Speaker</h4>
                                                    <p className="item-price"><strike>$109.00</strike>
                                                        <span>$99.00</span></p>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300"
                                                         className="img-fluid" alt="Galaxy" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Samsung Galaxy S8</h4>
                                                    <p className="item-price"><strike>$599.00</strike>
                                                        <span>$569.00</span></p>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="item carousel-item">
                                    <div className="row">
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300"
                                                         className="img-fluid" alt="iPhone" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Apple iPhone</h4>
                                                    <p className="item-price"><strike>$369.00</strike>
                                                        <span>$349.00</span></p>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300" className="img-fluid"
                                                         alt="Canon" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Canon DSLR</h4>
                                                    <p className="item-price"><strike>$315.00</strike>
                                                        <span>$250.00</span></p>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300" className="img-fluid"
                                                         alt="Pixel" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Google Pixel</h4>
                                                    <p className="item-price"><strike>$450.00</strike>
                                                        <span>$418.00</span></p>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-sm-3">
                                            <div className="thumb-wrapper">
                                                <span className="wish-icon"><i className="fa fa-heart-o"></i></span>
                                                <div className="img-box">
                                                    <img src="https://picsum.photos/300/300" className="img-fluid"
                                                         alt="Watch" />
                                                </div>
                                                <div className="thumb-content">
                                                    <h4>Apple Watch</h4>
                                                    <p className="item-price"><strike>$350.00</strike>
                                                        <span>$330.00</span></p>
                                                    <div className="star-rating">
                                                        <ul className="list-inline">
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star"></i></li>
                                                            <li className="list-inline-item"><i
                                                                className="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <a href="#" className="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a className="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i className="fa fa-angle-left"></i>
                            </a>
                            <a className="carousel-control-next" href="#myCarousel" data-slide="next">
                                <i className="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    )
    }
}