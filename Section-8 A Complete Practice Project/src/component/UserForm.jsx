import React, { useState } from 'react';
import ListOfUsers from './ListOfUsers';
import '../App.css'
const UserForm = () =>{
    const [userData, setUserData] = useState({
        userName:'',
        userAge:''
    });
    const [storeData, setStoreData] = useState([]);
    const InputChange1 = (event) =>{
        setUserData({...userData, userName:event.target.value});
    }
    const InputChange2 = (event) =>{
        setUserData({...userData, userAge:event.target.value});
    }
    const saveRecord = (event) =>{
        event.preventDefault();
        if(userData.userName ==='' && userData.userAge<=0) 
        {
            alert('Please enter a valid name and age (non empty values)');
        }
        else if(userData.userName ==='') 
        {
            alert("Please Enter Your Name");
        }
        else if(userData.userAge<=0)
        {
            alert("Please Enter Valid Age (>0)");
        }
        else{
            setStoreData((oldItems)=>{
                return [...oldItems, userData];
            });
            setUserData({userName:'',userAge:''});
        }
    }
    return(
        <div className="container mt-5">
            <form onSubmit={saveRecord} >
                <div className="form-group">
                    <label>User Name:</label>
                    <input type="text" className="form-control" onChange={InputChange1} value={userData.userName}/>
                </div>
                <div className="form-group">
                    <label>Age:</label>
                    <input type="number" className="form-control" onChange={InputChange2} value={userData.userAge} />
                </div>
                <div className="text-center">
                    <input type="submit" className="btn btn-primary mt-3 " value = "Save Record" />
                </div>
            </form>
            <table className="table table-dark table-striped mt-4">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>User Age</th>
                    </tr>
                </thead>
                <tbody>
                {
                    storeData.map((currentValue, index)=>{
                        return <ListOfUsers users = {currentValue} key = {index}></ListOfUsers>
                    })
                }    
                </tbody>
            </table>

        </div>
    );
}
export default UserForm;