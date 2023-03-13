<template>
    <!-- <div>
        <div ref="parentSidebar" id="parentx">
            <vs-sidebar :parent="$refs.parentSidebar" default-index="1" color="primary" class="sidebarx" spacer
                v-model="active">

                <div class="header-sidebar">
                    <vs-avatar size=" 70px" src="https://randomuser.me/api/portraits/men/85.jpg" />
                    <h4>
                        My Name
                        <vs-button color="primary" icon="more_horiz" type="flat"></vs-button>
                    </h4>

                </div>

                <vs-sidebar-item index="1" icon="question_answer">
                    Dashboard
                </vs-sidebar-item>

                <vs-sidebar-item index="2" icon="gavel">
                    History
                </vs-sidebar-item>

                <vs-divider icon="person" position="left">
                    User
                </vs-divider>

                <vs-sidebar-item index="3" icon="verified_user">
                    Configurations
                </vs-sidebar-item>
                <vs-sidebar-item index="4" icon="account_box">
                    Profile
                </vs-sidebar-item>
                <vs-sidebar-item index="5">
                    Card
                </vs-sidebar-item>

                <div class="footer-sidebar">
                    <vs-button icon="reply" color="danger" type="flat">log out</vs-button>
                    <vs-button icon="settings" color="primary" type="border"></vs-button>
                </div>

            </vs-sidebar>
        </div> 
    </div> -->
    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <vs-button @click="active = !active" color="primary" type="filled">Open Sidebar</vs-button>
    </div>
    <vs-navbar v-model="activeItem" class="nabarx">
        <slot name="title">
            <vs-navbar-title>
                {{ text }}
            </vs-navbar-title>
        </slot>

        <vs-navbar-item index="0">
            <a href="#">Home</a>
        </vs-navbar-item>
        <vs-navbar-item index="1">
            <a href="#">News</a>
        </vs-navbar-item>
        <vs-navbar-item index="2">
            <a href="#">Update</a>
        </vs-navbar-item>
    </vs-navbar>
</template>

<script>
export default {
    props: {
        text: String
    },
    data: () => ({
        activeItem: 0,
        active: false,
    })

}
</script>

