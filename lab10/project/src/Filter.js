import React, {Component} from "react"

class Filter extends Component {
    
    changeHandler() {
        
    }

    render() {
        const filterStyle = {
            display: "none"
        }
        
        return (
            <div>
                <input type="checkbox" onChange={this.changeHandler}/> Hide completed tasks <br /><br />
                <p style={filterStyle}>Filtr</p>
            </div>
        )
    }
}

export default Filter