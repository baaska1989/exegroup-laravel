const route_store = {
    state: {
        current_route: false,
    },
    mutations: {
        SET_ROUTE_NAME: function (state, data) {
            state.current_route = data.name;
        },
    },
    actions: {
        SET_ROUTE_NAME: function (context, data) {
            context.commit("SET_ROUTE_NAME", data);
        },
    },
    getters: {
        current_route: (state) => {
            return state.current_route;
        },
    },
};

export default route_store;
