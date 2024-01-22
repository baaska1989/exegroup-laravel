import { defineStore } from "pinia";
import { Icon } from "../base-components/Lucide/Lucide.vue";

export interface Menu {
  icon: Icon;
  title: string;
  pageName?: string;
  subMenu?: Menu[];
  ignore?: boolean;
}

export interface SideMenuState {
  menu: Array<Menu | "divider">;
}

export const useSideMenuStore = defineStore("sideMenu", {
    state: (): SideMenuState => ({
        menu: [
            {
                icon: "LayoutDashboard",
                pageName: "AdminDashboard",
                title: "Dashboard",
            },
            {
                icon: "UserPlus",
                pageName: "Teachers",
                title: "Teachers",
            },
            {
                icon: "CreditCard",
                pageName: "IntroCard",
                title: "Intro card",
            },
            {
                icon: "CalendarPlus",
                pageName: "Event",
                title: "Event card",
            },
            {
                icon: "Newspaper",
                pageName: "News",
                title: "News",
            },
            {
                icon: "Menu",
                pageName: "Optimized",
                title: "Optimized",
            },
            {
                icon: "UserCheck",
                pageName: "Clients",
                title: "Client register",
            },
            {
                icon: "Package",
                pageName: "Reports",
                title: "Reports",
            },

            {
                icon: "Settings",
                pageName: "Settings",
                title: "Settings",
                subMenu: [
                    {
                        icon: "Users",
                        pageName: "Users",
                        title: "Users",
                    },

                ],
            },
        ],
    }),
});
