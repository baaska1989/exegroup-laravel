import { createStore } from 'vuex';
import auth_store from './auth_store';
import route_store from './route_store';

const store = new createStore({
    modules: {
        auth_store: auth_store,
        route_store: route_store,
    }
});

export default store;
