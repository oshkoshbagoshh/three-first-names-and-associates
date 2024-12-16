<!-- <template>

</template>
<script setup>
<script src="https://d3js.org/d3.v7.min.js">
</script>
    <style scoped>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8fafc;
            color: #334155;
        }

        #app {
            text-align: center;
        }

        h1 {
            color: #1e293b;
            margin-bottom: 2rem;
        }

        #chart {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            padding: 30px;
            margin-bottom: 2rem;
        }

        .bar {
            fill: #60a5fa;
            transition: all 0.3s ease;
        }

        .bar:hover {
            fill: #3b82f6;
            cursor: pointer;
        }

        .bar-label {
            fill: #475569;
            font-size: 12px;
        }

        .axis-label {
            fill: #64748b;
            font-size: 14px;
        }

        .controls {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }

        button {
            background-color: #3b82f6;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.2s ease;
        }

        button:hover {
            background-color: #2563eb;
            transform: translateY(-1px);
        }

        .tooltip {
            position: absolute;
            padding: 8px 12px;
            background: #334155;
            color: white;
            border-radius: 4px;
            font-size: 14px;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .axis line, .axis path {
            stroke: #e2e8f0;
        }

        .axis text {
            fill: #64748b;
        }
    </style>

    <div id="app">
        <h1>{{ title }}</h1>
        <div id="chart"></div>
        <div class="controls">
            <button @click="shuffleData">
                <i class="fas fa-random"></i> Shuffle Data
            </button>
            <button @click="addCity">
                <i class="fas fa-plus"></i> Add City
            </button>
            <button @click="sortData">
                <i class="fas fa-sort"></i> Sort Data
            </button>
        </div>
    </div>
    <script>
        const { createApp, ref, onMounted } = Vue;
        createApp({
            setup() {
                const title = ref('Global City Populations');
                const sortAscending = ref(true);
                const data = ref([
                    { name: 'Tokyo', population: 37400000 },
                    { name: 'Delhi', population: 32940000 },
                    { name: 'Shanghai', population: 28517904 },
                    { name: 'São Paulo', population: 22043028 },
                    { name: 'Mexico City', population: 21782378 }
                ]);

                const renderChart = () => {
                    // Clear previous chart
                    d3.select('#chart').selectAll('*').remove();

                    // Set up chart dimensions
                    const margin = { top: 40, right: 60, bottom: 60, left: 120 };
                    const width = 800 - margin.left - margin.right;
                    const height = 400 - margin.top - margin.bottom;

                    // Create SVG
                    const svg = d3.select('#chart')
                        .append('svg')
                        .attr('width', width + margin.left + margin.right)
                        .attr('height', height + margin.top + margin.bottom)
                        .append('g')
                        .attr('transform', `translate(${margin.left},${margin.top})`);

                    // Create tooltip
                    const tooltip = d3.select('#chart')
                        .append('div')
                        .attr('class', 'tooltip');

                    // Scales
                    const x = d3.scaleLinear()
                        .domain([0, d3.max(data.value, d => d.population)])
                        .range([0, width]);

                    const y = d3.scaleBand()
                        .domain(data.value.map(d => d.name))
                        .range([0, height])
                        .padding(0.2);

                    // Axes
                    svg.append('g')
                        .attr('class', 'axis')
                        .attr('transform', `translate(0,${height})`)
                        .call(d3.axisBottom(x)
                            .ticks(5)
                            .tickFormat(d => d3.format('.2s')(d)));

                    svg.append('g')
                        .attr('class', 'axis')
                        .call(d3.axisLeft(y));

                    // Axis labels
                    svg.append('text')
                        .attr('class', 'axis-label')
                        .attr('x', width / 2)
                        .attr('y', height + 40)
                        .style('text-anchor', 'middle')
                        .text('Population');

                    // Bars with animations and interactions
                    const bars = svg.selectAll('.bar')
                        .data(data.value)
                        .enter()
                        .append('rect')
                        .attr('class', 'bar')
                        .attr('x', 0)
                        .attr('y', d => y(d.name))
                        .attr('height', y.bandwidth())
                        .attr('width', 0)
                        .on('mouseover', function(event, d) {
                            d3.select(this)
                                .transition()
                                .duration(200)
                                .attr('opacity', 0.8);

                            tooltip.style('opacity', 1)
                                .html(`${d.name}<br>${d3.format(',')(d.population)}`)
                                .style('left', (event.pageX + 10) + 'px')
                                .style('top', (event.pageY - 28) + 'px');
                        })
                        .on('mouseout', function() {
                            d3.select(this)
                                .transition()
                                .duration(200)
                                .attr('opacity', 1);

                            tooltip.style('opacity', 0);
                        });

                    // Animate bars
                    bars.transition()
                        .duration(1000)
                        .delay((d, i) => i * 100)
                        .attr('width', d => x(d.population));

                    // Add value labels
                    svg.selectAll('.bar-label')
                        .data(data.value)
                        .enter()
                        .append('text')
                        .attr('class', 'bar-label')
                        .attr('x', d => x(d.population) + 5)
                        .attr('y', d => y(d.name) + y.bandwidth() / 2)
                        .attr('dy', '.35em')
                        .style('opacity', 0)
                        .text(d => d3.format('.2s')(d.population))
                        .transition()
                        .duration(1000)
                        .delay((d, i) => i * 100)
                        .style('opacity', 1);
                };

                const shuffleData = () => {
                    data.value = data.value
                        .sort(() => Math.random() - 0.5)
                        .map(d => ({...d}));
                    renderChart();
                };

                const sortData = () => {
                    sortAscending.value = !sortAscending.value;
                    data.value.sort((a, b) =>
                        sortAscending.value
                            ? a.population - b.population
                            : b.population - a.population
                    );
                    renderChart();
                };

                const addCity = () => {
                    const newCities = [
                        { name: 'Cairo', population: 21750020 },
                        { name: 'Mumbai', population: 22840000 },
                        { name: 'Beijing', population: 21893095 },
                        { name: 'Dhaka', population: 21741090 },
                        { name: 'Karachi', population: 16839950 }
                    ];
                    const randomCity = newCities[Math.floor(Math.random() * newCities.length)];

                    if (!data.value.some(d => d.name === randomCity.name)) {
                        data.value.push(randomCity);
                        renderChart();
                    }
                };

                onMounted(renderChart);

                return {
                    title,
                    shuffleData,
                    addCity,
                    sortData
                };
            }
        }).mount('#app');
    </script>
</body>
</html> -->
