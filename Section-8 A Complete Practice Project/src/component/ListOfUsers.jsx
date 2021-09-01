import React from 'react';
import '../App.css';
const ListOfUsers = (props) =>{
    return(
                <tr>
                    <td>{props.users.userName}</td>
                    <td>{props.users.userAge}</td>
                </tr>
    );
}

export default ListOfUsers;