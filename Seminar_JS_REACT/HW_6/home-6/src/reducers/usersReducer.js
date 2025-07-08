const initialState = {
    users: [],
    error: null,
  };
  
  const usersReducer = (state = initialState, action) => {
    switch (action.type) {
      case 'FETCH_USERS_REQUEST':
        return {
          ...state,
          error: null
        };
      case 'FETCH_USERS_SUCCESS':
        return {
          ...state,
          users: action.payload
        };
      case 'FETCH_USERS_FAILURE':
        return {
          ...state,
          error: action.error
        };
      default:
        return state;
    }
  };
  
  export default usersReducer;