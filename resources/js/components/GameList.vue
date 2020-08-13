<template>
<div>
    <div class="row mb-3">
        <div class="col-12">
            <form class="d-flex justify-content-around">
                <div class="filter">
                    <label>Name
                        <input v-model="name" type="text" class="form-control" placeholder="Name" @input="fetch">
                    </label>
                </div>
                <div class="filter">
                    <label>Tier
                        <select v-model="tier" class="form-control" @change="fetch">
                            <option value="Mighty">Mighty</option>
                            <option value="Strong">Strong</option>
                            <option value="Fair">Fair</option>
                            <option value="Weak">Weak</option>
                        </select>
                    </label>
                    <label>Exclusive
                        <select v-model="exclusive" class="form-control" @change="fetch">
                            <option value="Sony">Sony</option>
                            <option value="Microsoft">Microsoft</option>
                            <option value="Nintendo">Nintendo</option>
                        </select>
                    </label>
                </div>
                <div class="filter">
                    <div class="form-check">

                        <input v-model="is_major" class="form-check-input" type="checkbox" id="is_major" @change="fetch" >
                        <label for="is_major"> Major</label>
                    </div>
                </div>
                <div class="filter">
                    <label>Score
                        <input v-model="score" type="number" class="form-control" @input="fetch" placeholder="Top Critic Score">
                    </label>
                </div>

                <div class="submit">
                    <button type="submit" @click.prevent="fetch" class="btn btn-primary" :disabled="busy">
<!--                        <i v-if="busy" class="fa fa-spin fa-spinner"></i>-->
                        Filter!
                    </button>
                </div>

                <div class="submit">
                    <button type="submit" @click.prevent="reset" class="btn btn-danger"  :disabled="busy">
<!--                        <i v-if="busy" class="fa fa-spin fa-spinner"></i>-->
                        Reset!
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Tier</th>
                        <th>Major</th>
                        <th>Score</th>
                        <th>Platforms</th>
                    </tr>

                    <tr v-for="game in games">
                        <td>{{ game.name }}</td>
                        <td>{{ game.tier}}</td>
                        <td>{{ game.isMajorTitle ? "Yes" : "No" }}</td>
                        <td>{{ game.topCriticScore }}</td>
                        <td>
                        <p v-if="game.Sony">PS</p>
                        <p v-if="game.Microsoft">Mike</p>
                        <p v-if="game.Nintendo">Nina</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        data() {
            return {
                name: null,
                tier: null,
                is_major: null,
                score: null,
                exclusive:null,
                games: [],
                busy: false
            }
        },

        methods: {
            reset() {
                this.name = null
                this.score = null
                this.is_major = null
                this.tier = null
                this.exclusive = null
                this.fetch()
            },
            fetch() {
                this.busy = true
                axios.get(`/api/game`, {
                    params: {
                        name: this.name,
                        tier: this.tier,
                        is_major: this.is_major,
                        score: this.score,
                        exclusive: this.exclusive
                    }
                })
                    .then(response => {
                        this.games = response.data
                        this.busy = false
                    })
            }
        },

        mounted() {
            this.fetch()
        }
    }
</script>
