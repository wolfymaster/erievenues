<template>
    <div>
        <h1>Search Venue</h1>
        <input type="text" v-model="search" placeholder="Search Venue"/>
        <div v-for="venue in filteredVenues" :key="venue.title">
            <h2>{{venue.title}}</h2>
            <p>{{venue.body}}</p>
        </div>
    </div>
</template>

<script>
export default {
data() {
    return {
        venues: [
            {
                title: "bayfront Marriott",
                body: "some test and other text and something to search for"
            },
            {
                title: "Voodoo Brewerie",
                body: "something clever and easy to search for"
            },
            {
                title: "Title 3",
                body: "Paragraph 3......stufff.....and more...."
            }
        ],
        search: ''

    }
},
methods: {
    
},
computed: 
{
    filteredVenues: function() {
        return this.venues.filter((venue => {
            return venue.title.match(this.search);
        }))
    },
}

}
</script>

<style>

</style>