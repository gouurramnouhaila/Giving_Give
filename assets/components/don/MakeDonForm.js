import React, {useRef} from "react";
import '../../styles/layout/styles/formDon.css';
import '../../styles/layout/styles/formDon.js';
import uuid from "react-native-uuid";
import {useParams} from "react-router-dom";


export default function MakeDonation () {

    const user = JSON.parse(localStorage.getItem('currentUser'));
    const params = useParams();
    const amount = useRef(null);

    const makeDon = () => {
        let don = {
            id: uuid.v4(),
            contributor_id: user.id,
            project_id: params.id,
            amount: amount.current.value
        }

        return fetch('/api/dons/add', {
            method: 'POST',
            body: JSON.stringify(don),
            headers: {
                'Content-Type': 'application/json',
            }
        }).then(res => {
            console.log(res);
        })
    }
    return (
        <div className="container-fluid px-0" id="bg-div">
            <div className="row justify-content-center">
                <div className="col-lg-9 col-12">
                    <div className="card card0" style={{width: "1000px"}}>
                        <div className="d-flex" id="wrapper">

                            <div className="bg-light border-right" id="sidebar-wrapper">
                                <div className="sidebar-heading pt-5 pb-4">
                                    <strong>PAY WITH</strong>
                                </div>
                                <div className="list-group list-group-flush">
                                    <a data-toggle="tab" href="#menu1" id="tab1" className="tabs list-group-item bg-light">
                                        <div className="list-div my-2">
                                            <div className="fa fa-home"></div>
                                            &nbsp;&nbsp; Bank
                                        </div>
                                    </a> <a data-toggle="tab" href="#menu2" id="tab2"
                                        className="tabs list-group-item active1">
                                    <div className="list-div my-2">
                                        <div className="fa fa-credit-card"></div>
                                        &nbsp;&nbsp; PayPal
                                    </div>
                                </a> <a data-toggle="tab" href="#menu3" id="tab3"
                                        className="tabs list-group-item bg-light">
                                    <div className="list-div my-2">
                                        <div className="fa fa-qrcode"></div>
                                        &nbsp;&nbsp;&nbsp; Visa QR <span id="new-label">NEW</span>
                                    </div>
                                </a></div>
                            </div>
                            <div id="page-content-wrapper">
                                <div className="row pt-3" id="border-btm">
                                    <div className="col-8 mt-5">
                                        <div className="row justify-content-right">
                                            <div className="col-12">
                                                <p className="mb-0 text-right m-lef-80 display-one-line">
                                                    You support the <b>-XXX-</b> Challenge fundraiser campaign
                                                </p>
                                                <p className="text-secondary text-right text-t display-one-line-s">Your donation will help Marius Brouet</p>
                                            </div>
                                        </div>
                                        <div className="row justify-content-right">
                                            <div className="col-12">
                                                <p className="mb-0 mr-4 text-right display-one-line-s">Pay <span
                                                    className="top-highlight">$ 100</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="tab-content">
                                    <div id="menu2" className="tab-pane in active">
                                        <div className="row justify-content-center">
                                            <div className="col-11">
                                                <div className="form-card">
                                                    <h3 className="mt-0 mb-4 text-center mt-3">Make Donation</h3>
                                                    <form onChange={e => {console.log(e)}}>
                                                        <div className="row">
                                                            <div className="col-12">
                                                                <div className="input-group">
                                                                    <input type="text" id="cr_no" placeholder="0000 0000 0000 0000" minLength="19" maxLength="19" />
                                                                    <label>CARD NUMBER</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div className="row">
                                                            <div className="col-12">
                                                                <div className="input-group">
                                                                    <input type="text" id="amount" placeholder="0$"  readOnly={false} ref={amount}/>
                                                                    <label>Amount</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div className="row">
                                                            <div className="col-6">
                                                                <div className="input-group">
                                                                    <input type="text" name="exp" id="exp" placeholder="MM/YY" minLength="5" maxLength="5" />
                                                                    <label>CARD EXPIRY</label>
                                                                </div>
                                                            </div>
                                                            <div className="col-6">
                                                                <div className="input-group">
                                                                    <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" className="placeicon" minLength="3" maxLength="3" />
                                                                    <label>CVV</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div className="row">
                                                            <div className="col-md-12">
                                                                <div id="paypal-button-container"></div>
                                                            </div>
                                                        </div>
                                                        <div className="row">
                                                            <div className="col-md-12">
                                                                <p className="text-center m-5" id="below-btn">
                                                                    <a href="#">Crowdfunding</a> is not shopping Your donation is a way to support a project but does not guarantee that you will receive a perk.
                                                                    You may request a full refund from Indiegogo until the campaign ends on August 07, 2022, unless the Campaign Owner has initiated shipping with a tracking number. Any refunds after this date are the responsibility of the campaign owner, Gary Yau, at their discretion.
                                                                    <a>Learn more</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu3" className="tab-pane">
                                        <div className="row justify-content-center">
                                            <div className="col-11">
                                                <h3 className="mt-0 mb-4 text-center">Scan the QR code to pay</h3>
                                                <div className="row justify-content-center">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}