import async from "../components/Async";

import {
    Bell as Bellicon,
    BookOpen as BookOpenIcon,
    Calendar as CalendarIcon,
    CheckSquare as CheckSquareIcon,
    Grid as GridIcon,
    Heart as HeartIcon,
    Layout as LayoutIcon,
    List as ListIcon,
    MapPin as MapPinIcon,
    Monitor as MonitorIcon,
    PieChart as PieChartIcon,
    Sliders as SlidersIcon,
    Users as UsersIcon,
    Watch as WacthIcon,
    Settings as SettingsIcon,
    ShoppingBag as ShoppingBagIcon,
} from "react-feather";

// Auth
import SignIn from "../pages/auth/SignIn";
import SignUp from "../pages/auth/SignUp";
import ResetPassword from "../pages/auth/ResetPassword";
import Page404 from "../pages/auth/Page404";
import Page500 from "../pages/auth/Page500";

// Pages
import Profile from "../pages/pages/Profile";
import Settings from "../pages/pages/Settings";
import Clients from "../pages/pages/Clients";

// Dashboards
const Default = async(() => import("../pages/dashboards/Default"));
const Analytics = async(() => import("../pages/dashboards/Analytics"));
const Ecommerce = async(() => import("../pages/dashboards/Ecommerce"));
const Crypto = async(() => import("../pages/dashboards/Crypto"));
const Social = async(() => import("../pages/dashboards/Social"));

const Watches = async(() => import("../pages/watches/index"));
const SingleWatch = async(() => import("../pages/watches/show"));

const Editors = async(() => import("../pages/forms/Editors"));
const RowSelectionTables = async(() => import("../pages/tables/RowSelection"));

// Routes


const dashboardRoutes = {
    path: "/dashboard",
    name: "Dashboards",
    header: "Pages",
    badgeColor: "primary",
    badgeText: "5",
    icon: SlidersIcon,
    containsHome: true,
    children: [
        {
            path: "/app/dashboard",
            name: "Default",
            component: Default
        },
        {
            path: "/app/dashboard/analytics",
            name: "Analytics",
            component: Analytics
        },
        {
            path: "/app/dashboard/e-commerce",
            name: "E-commerce",
            component: Ecommerce
        },
        {
            path: "/app/dashboard/social",
            name: "Social",
            component: Social
        },
        {
            path: "/app/dashboard/crypto",
            name: "Crypto",
            component: Crypto,
            badgeColor: "primary",
            badgeText: "New"
        },
    ]
};

const watchRoutes = {
    path: "/app/watches",
    name: "Watches",
    icon: WacthIcon,
    children: [
        {
            path: "/app/watches/",
            name: "All watches",
            component: Watches
        },
        {
            path: "/app/watches/create",
            name: "Add new watch",
            component: Editors
        },
        {
            path: "/app/watches/categories",
            name: "Categories",
            component: RowSelectionTables
        }
    ]
};

const singleWatchRoutes = {
    path: "/app/watches/:id",
    name: "Single Watch",
    component: SingleWatch
};

const accessoryRoutes = {
    path: "/app/accessories",
    name: "Accessories",
    icon: ShoppingBagIcon,
    children: [
        {
            path: "/app/accessories",
            name: "All accessories",
            component: Clients
        },
        {
            path: "/app/accessories/create",
            name: "Add new accessory",
            component: Editors
        },
        {
            path: "/app/accessories/categories",
            name: "Categories",
            component: RowSelectionTables
        },
    ]
};

const generalRoutes = {
    path: "/app/general",
    name: "General",
    icon: SettingsIcon,
    children: [
        {
            path: "/app/general/profile",
            name: "Profile",
            component: Profile
        },
        {
            path: "/app/general/settings",
            name: "Settings",
            component: Settings
        }
    ]
};

const usersRoutes = {
    path: "/app/users",
    name: "Users",
    icon: UsersIcon,
    children: [
        {
            path: "/app/users",
            name: "All users",
            component: Clients
        },
        {
            path: "/app/users/create",
            name: "Add new user",
            component: Editors
        }
    ]
};


const authRoutes = {
    path: "/auth",
    name: "Auth",
    icon: UsersIcon,
    badgeColor: "secondary",
    badgeText: "Special",
    children: [
        {
            path: "/sign-in",
            name: "Sign In",
            component: SignIn
        },
        {
            path: "/sign-up",
            name: "Sign Up",
            component: SignUp
        },
        {
            path: "/reset-password",
            name: "Reset Password",
            component: ResetPassword
        },
        {
            path: "/404",
            name: "404 Page",
            component: Page404
        },
        {
            path: "/500",
            name: "500 Page",
            component: Page500
        }
    ]
};

// Dashboard specific routes
export const dashboard = [
    dashboardRoutes,
    watchRoutes,
    accessoryRoutes,
    usersRoutes,
    generalRoutes,
    singleWatchRoutes
];

// Auth specific routes
export const page = [authRoutes];

// All routes
export default [
    dashboardRoutes,
    watchRoutes,
    accessoryRoutes,
    usersRoutes,
    generalRoutes
];
