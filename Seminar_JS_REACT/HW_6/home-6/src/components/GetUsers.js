import React from 'react';
import { useDispatch, useSelector } from 'react-redux';

const GetUsers = () => {
    const dispatch = useDispatch();
    const users = useSelector(state => state.users.users);

    const handleFetchUsers = () => {
        dispatch({ type: 'FETCH_USERS_REQUEST' });
    };

    return (
        <div>
            <button onClick={handleFetchUsers}>Get User Info</button>
            <ul>
                {users.map(user => (
                    <li key={user.id}>{user.name}</li>
                ))}
            </ul>
        </div>
    );
};

export default GetUsers;