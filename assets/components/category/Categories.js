import React from "react";

export default function Categories(props) {


        return (
            <div className="flex">
                {props.categories.map( category =>
                <div key={category.id}>
                    <div className="d">
                        <img
                            className="img-fluid img-responsive rounded product-image mt-2"
                            src={ require(`./images/${category.photo}`) } />
                    </div>
                    <br/><p className="text-black mt-0 center m-l">{category.name}</p>
                </div>
                )}
            </div>
        )

}